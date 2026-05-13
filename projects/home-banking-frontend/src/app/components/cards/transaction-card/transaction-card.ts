import { Component, Input } from '@angular/core';
import { Transaction } from '../../../models/transaction';

@Component({
  selector: 'app-transaction-card',
  imports: [],
  templateUrl: './transaction-card.html',
  styleUrl: './transaction-card.css',
})
export class TransactionCard {
  @Input() transaction!: Transaction
}
