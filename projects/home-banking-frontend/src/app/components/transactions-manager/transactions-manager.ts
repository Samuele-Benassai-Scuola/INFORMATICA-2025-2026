import { Component } from '@angular/core';
import { Transaction } from '../../models/transaction';
import { CommonModule } from '@angular/common';
import { TransactionCard } from '../cards/transaction-card/transaction-card';

@Component({
  selector: 'app-transactions-manager',
  imports: [CommonModule, TransactionCard],
  templateUrl: './transactions-manager.html',
  styleUrl: './transactions-manager.css',
})
export class TransactionsManager {
  transactions: Transaction[] = [
    {id: 1, id_account: 1, type: 'DEPOSIT', amount: 100, description: 'AAAAAAAAAAAAAAAAAAAAA', created_at: new Date('2026-01-01T01:00:00'), balance_after: 100},
    {id: 1, id_account: 1, type: 'WITHDRAWAL', amount: 50, description: 'B', created_at: new Date('2026-01-01T01:00:00'), balance_after: 50},
    {id: 1, id_account: 1, type: 'DEPOSIT', amount: 200, description: 'AAAAAAAAAAAAAAAAAAAAA', created_at: new Date('2026-01-01T01:00:00'), balance_after: 250},
    {id: 1, id_account: 1, type: 'DEPOSIT', amount: 100, description: 'AAAAAAAAAAAAAAAAAAAAA', created_at: new Date('2026-01-01T01:00:00'), balance_after: 350},
    {id: 1, id_account: 1, type: 'WITHDRAWAL', amount: 100, description: 'AAAAAAAAAAAAAAAAAAAAA', created_at: new Date('2026-01-01T01:00:00'), balance_after: 250}
  ]
}
