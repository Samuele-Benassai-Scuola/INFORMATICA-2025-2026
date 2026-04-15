import { Component, EventEmitter, Input, Output } from '@angular/core';
import { Hero } from '../../models/hero';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-hero-generator',
  imports: [CommonModule, FormsModule],
  templateUrl: './hero-generator.html',
  styleUrl: './hero-generator.css',
})
export class HeroGenerator {

  @Input() hero: Hero = {
    id: 1,
    name: "",
    power: "",
    completed: false
  }

  @Output() onGenerateHero = new EventEmitter<Hero>()

  triggerGenerateHero() {
    this.onGenerateHero.emit(this.hero)
  }
}
