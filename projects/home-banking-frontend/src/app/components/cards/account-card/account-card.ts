import { Component, Input } from '@angular/core';
import { Account } from '../../../models/account';

@Component({
  selector: 'app-account-card',
  imports: [],
  templateUrl: './account-card.html',
  styleUrl: './account-card.css',
})
export class AccountCard {
  @Input() account!: Account
}
