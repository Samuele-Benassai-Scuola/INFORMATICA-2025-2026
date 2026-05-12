import { Component } from '@angular/core';
import { Account } from '../../interfaces/account';
import { AccountDesc } from '../account-desc/account-desc';
import { CommonModule } from '@angular/common';
import { RouterLink } from "@angular/router";

@Component({
  selector: 'app-home',
  imports: [AccountDesc, CommonModule, RouterLink],
  templateUrl: './home.html',
  styleUrl: './home.css',
})
export class Home {
  accounts: Account[] = [
    {id: 1, tax_id: 'ITAAA', owner_name: 'Candela', created_at: new Date('2026-01-20T08:00:00'), id_currency: 1},
    {id: 2, tax_id: 'ITBBB', owner_name: 'Bardi', created_at: new Date('2026-01-20T08:00:00'), id_currency: 1},
    {id: 3, tax_id: 'ITCCC', owner_name: 'Gavris', created_at: new Date('2026-01-20T08:00:00'), id_currency: 1},
    {id: 4, tax_id: 'ITDDD', owner_name: 'Jacopo', created_at: new Date('2026-01-20T08:00:00'), id_currency: 2},
    {id: 5, tax_id: 'ITEEE', owner_name: 'Ca-ndela', created_at: new Date('2026-01-20T08:00:00'), id_currency: 2}
  ]
}
