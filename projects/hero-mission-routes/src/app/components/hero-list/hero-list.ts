import { Component, inject, Input } from '@angular/core';
import { HeroService } from '../../services/hero-service';
import { Hero } from '../../models/hero';
import { HeroCard } from '../hero-card/hero-card';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-hero-list',
  imports: [HeroCard, CommonModule],
  templateUrl: './hero-list.html',
  styleUrl: './hero-list.css',
})
export class HeroList {

  constructor(private heroes: HeroService) {}
  list!: Hero[]

  ngOnInit() {
    this.list = this.heroes.getList()
  }

  totalCompleted(): number {
    return this.list.filter(h => h.completed === true).length
  }
}
