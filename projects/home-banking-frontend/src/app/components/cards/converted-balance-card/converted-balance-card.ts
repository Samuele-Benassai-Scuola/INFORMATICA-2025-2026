import { Component } from '@angular/core';
import { ConvertedBalance } from '../../../models/converted-balance';

@Component({
  selector: 'app-converted-balance-card',
  imports: [],
  templateUrl: './converted-balance-card.html',
  styleUrl: './converted-balance-card.css',
})
export class ConvertedBalanceCard {
  converted_balance!: ConvertedBalance
}
