import { Routes } from '@angular/router';
import { Home } from './components/home/home';
import { AccountManager } from './components/account-manager/account-manager';
import { BalanceManager } from './components/balance-manager/balance-manager';
import { TransactionsManager } from './components/transactions-manager/transactions-manager';
import { TransactionMakerManager } from './components/transaction-maker-manager/transaction-maker-manager';

export const routes: Routes = [
    { path: 'app', component: Home },
    { path: 'app/account/:id_account', component: AccountManager},
    { path: 'app/account/:id_account/balance', component: BalanceManager},
    { path: 'app/account/:id_account/transaction', component: TransactionsManager},
    { path: 'app/account/:id_account/transaction/make', component: TransactionMakerManager},
];
