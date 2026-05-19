import { Component } from '@angular/core';
import { Balance } from '../../models/balance';
import { BalanceCard } from '../cards/balance-card/balance-card';
import { FormsModule } from '@angular/forms';
import { ConvertedBalance } from '../../models/converted-balance';
import { ConvertedBalanceCard } from '../cards/converted-balance-card/converted-balance-card';

@Component({
  selector: 'app-balance-manager',
  imports: [BalanceCard, FormsModule, ConvertedBalanceCard],
  templateUrl: './balance-manager.html',
  styleUrl: './balance-manager.css',
})
export class BalanceManager {
  // This doesn't work anymore
  balance: Balance = {id_account: 1, currency: 'EUR', balance: 200}

  conversion_type: string = 'fiat'
  conversion_currency: string = ''

  converted_balance: ConvertedBalance|null = {} as ConvertedBalance

  convert() {
    console.log(this.conversion_type + ' ' + this.conversion_currency)
    // TODO: logic
  }
}
