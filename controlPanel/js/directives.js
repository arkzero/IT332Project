'use strict';

/* Directives */


angular.module('controlPanel.directives', []).
	directive('listServices', function(){
		return function (scope, element, attrs) {
			scope.$watch('selected', function(val){
				var selected,
					list = "<ul id = 'servicesList'>"; 

				selected = val;
				console.log(selected)
				//Add Services to list
				if(selected.amazon === 'true'){
					list += "<li>Amazon</li>";
				}  if (selected.aol === 'true'){
					list += "<li>AOL</li>";
				}  if (selected.apple === 'true'){
					list += "<li>Apple</li>";
				}  if (selected.battlenet === 'true'){
					list += "<li>Battlenet</li>";
				}  if (selected.bebo === 'true'){
					list += "<li>Bebo</li>";
				}  if (selected.blogspot === 'true'){
					list += "<li>Blogspot</li>";
				}  if (selected.classmates_dot_com === 'true'){
					list += "<li>Classmates.com</li>";
				}  if (selected.comcast === 'true'){
					list += "<li>Comcast</li>";
				}  if (selected.delicious === 'true'){
					list += "<li>Delicious</li>";
				}  if (selected.deviantart === 'true'){
					list += "<li>Deviant Art</li>";
				}  if (selected.digg === 'true'){
					list += "<li>Digg</li>";
				}  if (selected.ebay === 'true'){
					list += "<li>eBay</li>";
				}  if (selected.facebook === 'true'){
					list += "<li>Facebook</li>";
				}  if (selected.flickr === 'true'){
					list += "<li>Flickr</li>";
				}  if (selected.flixster === 'true'){
					list += "<li>Flixster</li>";
				}  if (selected.foursquare === 'true'){
					list += "<li>FourSqaure</li>";
				}  if (selected.gaia_online === 'true'){
					list += "<li>Gaia Online</li>";
				}  if (selected.google === 'true'){
					list += "<li>Google</li>";
				}  if (selected.hotmail === 'true'){
					list += "<li>Hotmail</li>";
				}  if (selected.instagram === 'true'){
					list += "<li>Instagram</li>";
				}  if (selected.imgur === 'true'){
					list += "<li>IMGur</li>";
				}  if (selected.lastfm === 'true'){
					list += "<li>Last.FM</li>";
				}  if (selected.league_of_legends === 'true'){
					list += "<li>League Of Legends</li>";
				}  if (selected.linkedin === 'true'){
					list += "<li>LinkedIN</li>";
				}  if (selected.livejournal === 'true'){
					list += "<li>Live Journal</li>";
				}  if (selected.microsoft === 'true'){
					list += "<li>Microsoft</li>";
				}  if (selected.mylife === 'true'){
					list += "<li>MyLife</li>";
				}  if (selected.myspace === 'true'){
					list += "<li>MySpace</li>";
				}  if (selected.newegg === 'true'){
					list += "<li>Newegg</li>";
				}  if (selected.newsvine === 'true'){
					list += "<li>News Vine</li>";
				}  if (selected.optimum === 'true'){
					list += "<li>Optimum Online</li>";
				}  if (selected.origin === 'true'){
					list += "<li>Origin</li>";
				}  if (selected.paypal === 'true'){
					list += "<li>PayPal</li>";
				}  if (selected.planetside === 'true'){
					list += "<li>Planetside</li>";
				}  if (selected.playstation === 'true'){
					list += "<li>Playstation Network</li>";
				}  if (selected.reddit === 'true'){
					list += "<li>Reddit</li>";
				}  if (selected.second_life === 'true'){
					list += "<li>Second Life</li>";
				}  if (selected.steam === 'true'){
					list += "<li>Steam</li>";
				}  if (selected.stumbleupon === 'true'){
					list += "<li>Stumble Upon</li>";
				}  if (selected.tumblr === 'true'){
					list += "<li>Tumblr</li>";
				}  if (selected.twitter === 'true'){
					list += "<li>Twitter</li>";
				}  if (selected.yahoo === 'true'){
					list += "<li>Yahoo</li>";
				}  if (selected.youtube === 'true'){
					list += "<li>YouTube</li>";
				}  if (selected.world_of_warcraft === 'true'){
					list += "<li>World Of Warcraft</li>";
				}  if (selected.wordpress === 'true'){
					list += "<li>Word Press</li>";
				}

				list += "</ul>";
				$(element[0]).html(list);
			});
		}
  	});
