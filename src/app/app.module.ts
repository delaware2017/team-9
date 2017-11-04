import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { SplashScreen } from '@ionic-native/splash-screen';
import { StatusBar } from '@ionic-native/status-bar';

import { MyApp } from './app.component';
import { HomePage } from '../pages/home/home';
<<<<<<< HEAD
import { WelcomePage } from '../pages/welcome/welcome';
=======
import { NominatePage } from '../pages/nominate/nominate';
>>>>>>> 74aac65ddbdc103eb1a34dec0aa0e5ad7bcfcda5

import { AngularFireModule } from 'angularfire2';
import { AngularFireDatabaseModule } from 'angularfire2/database';

export const firebaseConfig = {
    apiKey: "AIzaSyDrDTEAsAdaiKuieKaAFnASJ2leirE_SH8",
    authDomain: "code-for-good-9.firebaseapp.com",
    databaseURL: "https://code-for-good-9.firebaseio.com",
    projectId: "code-for-good-9",
    storageBucket: "code-for-good-9.appspot.com",
    messagingSenderId: "479024488237"
};

@NgModule({
  declarations: [
    MyApp,
<<<<<<< HEAD
    WelcomePage, HomePage
=======
    HomePage,
    NominatePage
>>>>>>> 74aac65ddbdc103eb1a34dec0aa0e5ad7bcfcda5
  ],
  imports: [
    BrowserModule,
    AngularFireModule.initializeApp(firebaseConfig),
    AngularFireDatabaseModule
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
<<<<<<< HEAD
    HomePage, WelcomePage
=======
    HomePage,
    NominatePage
>>>>>>> 74aac65ddbdc103eb1a34dec0aa0e5ad7bcfcda5
  ],
  providers: [
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler}
  ]
})
export class AppModule {}
