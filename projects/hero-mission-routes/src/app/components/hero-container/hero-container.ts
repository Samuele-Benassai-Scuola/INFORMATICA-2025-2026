import { Component } from '@angular/core';
import { Hero } from '../../models/hero';

@Component({
  selector: 'app-hero-container',
  imports: [],
  templateUrl: './hero-container.html',
  styleUrl: './hero-container.css',
})
export class HeroContainer {
  list: Hero[] = [
    {id: 1, name: "A", power: "a", completed: false},
    {id: 2, name: "B", power: "b", completed: false},
    {id: 3, name: "C", power: "c", completed: false},
    {id: 4, name: "D", power: "d", completed: false}
  ]

  next_id = Math.max(...this.list.map(h => h.id)) + 1

  edited: Hero = {id: this.next_id} as Hero

  calculateNextId() {
    this.next_id = Math.max(...this.list.map(h => h.id), this.edited.id) + 1
  }

  editHero(id: number): boolean {
    const matches = this.list.filter(h => h.id = id)
    if (!matches)
      return false

    const hero = matches[0]
    this.edited = hero

    return true
  }

  newEditedHero(): number {
    this.calculateNextId()
    this.edited = {id: this.next_id} as Hero

    return this.edited.id
  }

  saveEditedHero(): boolean {
    if (this.edited.id < 1)
      return false
    if (this.edited.id in this.list.filter(h => h.id))
      return false

    this.list.push(this.edited)
    return true
  }
}
