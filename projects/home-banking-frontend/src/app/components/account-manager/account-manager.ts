import { Component } from '@angular/core';
import { ActivatedRoute, RouterLink } from '@angular/router';
import { TransactionsCard } from '../cards/transactions-card/transactions-card';
import { TransactionMakerCard } from '../cards/transaction-maker-card/transaction-maker-card';
import { BalanceRouteCard } from '../cards/balance-route-card/balance-route-card';

@Component({
  selector: 'app-account-manager',
  imports: [TransactionsCard, TransactionMakerCard, BalanceRouteCard],
  templateUrl: './account-manager.html',
  styleUrl: './account-manager.css',
})
export class AccountManager {
  id_account: number|null = null

  constructor(private route: ActivatedRoute) { }

  ngOnInit() {
    const arg = this.route.snapshot.paramMap.get('id_account');
    if (arg !== null)
      if (!isNaN(Number(arg)))
        this.id_account = Number(arg)
    
    console.log('ID:', this.id_account);
  }
}
