import { Component } from '@angular/core';
import { ActivatedRoute, RouterLink } from '@angular/router';
import { Hero } from '../../models/hero';
import { HeroService } from '../../services/hero-service';
import { JsonPipe } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-hero-edit',
  imports: [JsonPipe, FormsModule, RouterLink],
  templateUrl: './hero-edit.html',
  styleUrl: './hero-edit.css',
})
export class HeroEdit {

  constructor(
    private route: ActivatedRoute,
    private heroes: HeroService
  ) {}

  hero: Hero|null = null

  ngOnInit() {
    const id = this.route.snapshot.paramMap.get('id');
    this.retrieveHero(id)
  }

  retrieveHero(id: string|null) {
    if (id === null || isNaN(Number(id)))
      return

    const res = this.heroes.getHero(Number(id))
    if (!res)
      return

    this.hero = res as Hero
  }

  saveEdit() {
    this.heroes.updateHero(this.hero as Hero);
  }
}
