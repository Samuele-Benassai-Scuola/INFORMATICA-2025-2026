import { Component, EventEmitter, Input, Output } from '@angular/core';
import { Hero } from '../../models/hero';

@Component({
  selector: 'app-hero-card',
  imports: [],
  templateUrl: './hero-card.html',
  styleUrl: './hero-card.css',
})
export class HeroCard {

  @Input() hero!: Hero
  @Output() onCompleted = new EventEmitter<Hero>()

  triggerCompleted() {
    this.onCompleted.emit(this.hero)
  }
  
}
