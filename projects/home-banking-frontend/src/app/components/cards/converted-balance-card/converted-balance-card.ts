import { Component, Input } from '@angular/core';
import { ConvertedBalance } from '../../../models/converted-balance';

@Component({
  selector: 'app-converted-balance-card',
  imports: [],
  templateUrl: './converted-balance-card.html',
  styleUrl: './converted-balance-card.css',
})
export class ConvertedBalanceCard {
  @Input() converted_balance!: ConvertedBalance
}
