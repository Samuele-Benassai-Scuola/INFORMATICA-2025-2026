import { Component } from '@angular/core';
import { Hero } from '../../models/hero';
import { CommonModule } from '@angular/common';
import { HeroCard } from '../hero-card/hero-card';
import { HeroGenerator } from '../hero-generator/hero-generator';

@Component({
  selector: 'app-hero-list',
  imports: [CommonModule, HeroCard, HeroGenerator],
  templateUrl: './hero-list.html',
  styleUrl: './hero-list.css',
})
export class HeroList {

  list: Hero[] = [
    { id: 1, name: "A", power: "a", completed: false },
    { id: 2, name: "B", power: "b", completed: false },
    { id: 3, name: "C", power: "c", completed: false },
    { id: 4, name: "D", power: "d", completed: false },
    { id: 5, name: "E", power: "e", completed: false }
  ]

  totalCompleted: number = this.countTotalCompleted()

  handleCompleted(hero: Hero) {
    hero.completed = true
    this.totalCompleted = this.countTotalCompleted()
  }

  countTotalCompleted(): number {
    return this.totalCompleted = this.list.filter(h => h.completed).length
  }

  handleGenerateHero(hero: Hero) {
    this.list.push(hero)
  }
}
