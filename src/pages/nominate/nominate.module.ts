import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { NominatePage } from './nominate';

@NgModule({
  declarations: [
    NominatePage,
  ],
  imports: [
    IonicPageModule.forChild(NominatePage),
  ],
})
export class NominatePageModule {}
