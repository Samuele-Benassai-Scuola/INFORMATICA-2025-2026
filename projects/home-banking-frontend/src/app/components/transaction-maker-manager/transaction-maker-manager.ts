import { Component } from '@angular/core';
import { Transaction } from '../../models/transaction';
import { JsonPipe } from '@angular/common';
import { ActivatedRoute } from '@angular/router';
import { FormsModule } from '@angular/forms';
import { InfoTransaction } from '../../models/info_transaction';

@Component({
  selector: 'app-transaction-maker-manager',
  imports: [FormsModule],
  templateUrl: './transaction-maker-manager.html',
  styleUrl: './transaction-maker-manager.css',
})
export class TransactionMakerManager {
  id_account: number|null = null

  transaction: InfoTransaction|null = null

  constructor(private route: ActivatedRoute) { }

  ngOnInit() {
    const arg = this.route.snapshot.paramMap.get('id_account');
    if (arg !== null)
      if (!isNaN(Number(arg)))
        this.id_account = Number(arg)

    if (this.id_account !== null) {
      this.transaction = {
        id_account: this.id_account,
        type: 'DEPOSIT',
        amount: 0,
        description: ''
      }
    }
  }

  createTransaction() {
    console.log('a')
  }
}
