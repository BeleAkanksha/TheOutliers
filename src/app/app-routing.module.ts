import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { GuardGuard } from './core/guards/guard.guard';

const routes: Routes = [
  {
    path: '',
    loadChildren: () =>
      import('./auth/auth.module').then(
        (mod) => mod.AuthModule
      ),
  },
  {
    path: 'landing-page',
    loadChildren: () =>
      import('./landing-page/landing-page.module').then(
        (mod) => mod.LandingPageModule),
        canActivate: [GuardGuard],
  },
  // {
  //   path: 'catalogue',
  //   loadChildren: () =>
  //     import('./catalogue/catalogue.module').then((mod) => mod.CatalogueModule),
  //   canActivate: [AuthGuard],
  // },
  // {
  //   path: 'dashboard',
  //   loadChildren: () =>
  //     import('./dashboard/dashboard.module').then((mod) => mod.DashboardModule),
  //   canActivate: [AuthGuard],
  // },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule { }
