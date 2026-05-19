import { Component, Input } from '@angular/core';
import { Balance } from '../../../models/balance';

@Component({
  selector: 'app-balance-card',
  imports: [],
  templateUrl: './balance-card.html',
  styleUrl: './balance-card.css',
})
export class BalanceCard {
  @Input() balance!: Balance
}
