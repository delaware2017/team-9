import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { SplashScreen } from '@ionic-native/splash-screen';
import { StatusBar } from '@ionic-native/status-bar';

import { MyApp } from './app.component';
import { HomePage } from '../pages/home/home';

import { WelcomePage } from '../pages/welcome/welcome';

import { NominatePage } from '../pages/nominate/nominate';


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

    WelcomePage, HomePage

    HomePage,
    NominatePage

  ],
  imports: [
    BrowserModule,
    AngularFireModule.initializeApp(firebaseConfig),
    AngularFireDatabaseModule
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,

    HomePage, WelcomePage

    HomePage,
    NominatePage

  ],
  providers: [
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler}
  ]
})
export class AppModule {}
