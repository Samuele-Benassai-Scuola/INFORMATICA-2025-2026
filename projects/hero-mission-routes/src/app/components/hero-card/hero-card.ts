import { Component, Input } from '@angular/core';
import { Hero } from '../../models/hero';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-hero-card',
  imports: [RouterLink],
  templateUrl: './hero-card.html',
  styleUrl: './hero-card.css',
})
export class HeroCard {

  @Input() hero!: Hero

}
