import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

import { AngularFireDatabase, FirebaseListObservable } from 'angularfire2/database';

/**
 * Generated class for the AdminPage page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-admin',
  templateUrl: 'admin.html',
})
export class AdminPage {
	entries: FirebaseListObservable<any>;


  constructor(public navCtrl: NavController, public navParams: NavParams,
  	db: AngularFireDatabase) {
  	this.entries = db.list('/entries');
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad AdminPage');
  }

}
