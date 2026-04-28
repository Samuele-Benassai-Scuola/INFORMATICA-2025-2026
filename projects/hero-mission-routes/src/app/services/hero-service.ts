import { Injectable } from '@angular/core';
import { Hero } from '../models/hero';

@Injectable({
  providedIn: 'root',
})
export class HeroService {

  private list: Hero[] = [
    {id: 1, name: 'A', power: 'a', completed: false},
    {id: 2, name: 'B', power: 'b', completed: false},
    {id: 3, name: 'C', power: 'c', completed: false},
    {id: 4, name: 'D', power: 'd', completed: false}
  ]

  private next_id: number = Math.max(...this.list.map(h => h.id)) + 1

  calculateNextId() {
    this.next_id = Math.max(...this.list.map(h => h.id)) + 1
  }

  getList(): Hero[] {
    return ([] as Hero[]).concat(this.list)
  }

  getHero(id: number): Hero|boolean {
    const matches = this.list.filter(h => h.id === id)
    if (matches === undefined || matches.length == 0)
      return false

    const match = matches[0]
    return {...match}
  }

  updateHero(hero: Hero): boolean {
    const matches = this.list.filter(h => h.id === hero.id)
    if (matches === undefined || matches.length == 0)
      return false

    let match = matches[0]
    match = hero;
    return true;
  }

  createHero(hero: Hero): boolean {
    if (hero.id == -1) {
      this.calculateNextId()
      hero.id = this.next_id
    }

    const matches = this.list.filter(h => h.id === hero.id)
    if (matches === undefined || matches.length == 0)
      return false

    this.list.push(hero)

    return true
  }

  deleteHero(id: number): boolean {
    const matches = this.list.filter(h => h.id === id)
    if (matches === undefined || matches.length == 0)
      return false
  
    const match = matches[0]
    this.list = this.list.filter(h => h !== match)
    return true
  }
}
