import { Component } from '@angular/core';
import { Transaction } from '../../models/transaction';
import { TransactionCard } from '../cards/transaction-card/transaction-card';

@Component({
  selector: 'app-single-transaction-manager',
  imports: [TransactionCard],
  templateUrl: './single-transaction-manager.html',
  styleUrl: './single-transaction-manager.css',
})
export class SingleTransactionManager {
  transaction: Transaction = {} as Transaction
}
