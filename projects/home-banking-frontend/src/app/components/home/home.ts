import { Component } from '@angular/core';
import { Account } from '../../models/account';
import { CommonModule } from '@angular/common';
import { AccountCard } from '../cards/account-card/account-card';
import { RouterLink } from "@angular/router";

@Component({
  selector: 'app-home',
  imports: [CommonModule, AccountCard, RouterLink],
  templateUrl: './home.html',
  styleUrl: './home.css',
})
export class Home {
  accounts: Account[] = [
    { id: 1, tax_id: 'ITAAA', owner_name: 'Bardi', created_at: new Date('2026-01-01T01:00:00'), id_currency: 1},
    { id: 2, tax_id: 'ITBBB', owner_name: 'Bardi2', created_at: new Date('2026-01-01T02:00:00'), id_currency: 1},
    { id: 3, tax_id: 'ITCCC', owner_name: 'Bardi3', created_at: new Date('2026-01-01T03:00:00'), id_currency: 1},
    { id: 4, tax_id: 'ITDDD', owner_name: 'Bardi4', created_at: new Date('2026-03-01T01:00:00'), id_currency: 2},
    { id: 5, tax_id: 'ITEEE', owner_name: 'Bardi5', created_at: new Date('2026-03-01T10:00:00'), id_currency: 2}
  ]
}
