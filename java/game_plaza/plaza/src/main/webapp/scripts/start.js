!function(a){var b=function(){},c=b.prototype;!function(){var a=[],b=a.slice;Events=c.Events={on:function(a,b,c){if(!e(this,"on",a,[b,c])||!b)return this;this._events||(this._events={});var d=this._events[a]||(this._events[a]=[]);return d.push({callback:b,context:c,ctx:c||this}),this},once:function(a,b,c){if(!e(this,"once",a,[b,c])||!b)return this;var d=this,f=_.once(function(){d.off(a,f),b.apply(this,arguments)});return f._callback=b,this.on(a,f,c)},off:function(a,b,c){if(!this._events||!e(this,"off",a,[b,c]))return this;if(!a&&!b&&!c)return this._events=void 0,this;for(var d=a?[a]:_.keys(this._events),f=0,g=d.length;g>f;f++){a=d[f];var h=this._events[a];if(h)if(b||c){for(var i=[],j=0,k=h.length;k>j;j++){var l=h[j];(b&&b!==l.callback&&b!==l.callback._callback||c&&c!==l.context)&&i.push(l)}i.length?this._events[a]=i:delete this._events[a]}else delete this._events[a]}return this},trigger:function(a){if(!this._events)return this;var c=b.call(arguments,1);if(!e(this,"trigger",a,c))return this;var d=this._events[a],g=this._events.all;return d&&f(d,c),g&&f(g,arguments),this},listenTo:function(a,b,c){var d=this._listeningTo||(this._listeningTo={}),e=a._listenId||(a._listenId=_.uniqueId("l"));return d[e]=a,c||"object"!=typeof b||(c=this),a.on(b,c,this),this},listenToOnce:function(a,b,c){if("object"==typeof b){for(var e in b)this.listenToOnce(a,e,b[e]);return this}if(d.test(b)){for(var f=b.split(d),g=0,h=f.length;h>g;g++)this.listenToOnce(a,f[g],c);return this}if(!c)return this;var i=_.once(function(){this.stopListening(a,b,i),c.apply(this,arguments)});return i._callback=c,this.listenTo(a,b,i)},stopListening:function(a,b,c){var d=this._listeningTo;if(!d)return this;var e=!b&&!c;c||"object"!=typeof b||(c=this),a&&((d={})[a._listenId]=a);for(var f in d)a=d[f],a.off(b,c,this),(e||_.isEmpty(a._events))&&delete this._listeningTo[f];return this}};var d=/\s+/,e=function(a,b,c,e){if(!c)return!0;if("object"==typeof c){for(var f in c)a[b].apply(a,[f,c[f]].concat(e));return!1}if(d.test(c)){for(var g=c.split(d),h=0,i=g.length;i>h;h++)a[b].apply(a,[g[h]].concat(e));return!1}return!0},f=function(a,b){var c,d=-1,e=a.length,f=b[0],g=b[1],h=b[2];switch(b.length){case 0:for(;++d<e;)(c=a[d]).callback.call(c.ctx);return;case 1:for(;++d<e;)(c=a[d]).callback.call(c.ctx,f);return;case 2:for(;++d<e;)(c=a[d]).callback.call(c.ctx,f,g);return;case 3:for(;++d<e;)(c=a[d]).callback.call(c.ctx,f,g,h);return;default:for(;++d<e;)(c=a[d]).callback.apply(c.ctx,b);return}};Events.bind=Events.on,Events.unbind=Events.off}(),$.extend(c,c.Events),
c.Start=function()
	{
		var a=this;
		a.GoodsList(),
		a.StartListen()
	},
c.StartListen=function(){var a=this;a.AppListenGoodChange().AppListenPriceChange().AppListenHoldChange().AppListenAssetChange()},c.StopListen=function(){var a=this;a.AppStopListenGoodChange().AppStopListenPriceChange().AppStopListenHoldChange().AppStopListenAssetChange()},c.AppListenGoodChange=function(){var a=this;return a.off("trigger:goodchange").on("trigger:goodchange",function(){for(var b in a.ExtendObj||{})a.ExtendObj[b].trigger("trigger:goodchange");a.QueryCenterManage&&a.QueryCenterManage.showFrozenTime().UpdateDealRate().UpdataHoldings()}),a},c.AppListenPriceChange=function(){var b=this;return b.off("trigger:pricechange").on("trigger:pricechange",function(){for(var c in b.ExtendObj||{})b.ExtendObj[c].trigger("trigger:pricechange");b.QueryCenterManage&&b.QueryCenterManage.UpdataHoldings();var d=null;(d=a.document.getElementsByTagName("iframe")).length>0&&(d=d[0],"function"==typeof d.contentWindow.UpdateInfo&&d.contentWindow.UpdateInfo())}),b},c.AppListenHoldChange=function(){var a=this;return a.off("trigger:holdchange").on("trigger:holdchange",function(){for(var b in a.ExtendObj||{})a.ExtendObj[b].trigger("trigger:holdchange")}),a},c.AppListenAssetChange=function(){var a=this;return a.off("trigger:assetchange").on("trigger:assetchange",function(){for(var b in a.ExtendObj||{})a.ExtendObj[b].trigger("trigger:assetchange");a.QueryCenterManage&&a.QueryCenterManage.UpdataAsset()}),a},c.AppStopListenGoodChange=function(){var a=this;return a.off("trigger:goodchange"),a},c.AppStopListenPriceChange=function(){var a=this;return a.off("trigger:pricechange"),a},c.AppStopListenHoldChange=function(){var a=this;return a.off("trigger:holdchange"),a},c.AppStopListenAssetChange=function(){var a=this;return a.off("trigger:assetchange"),a},c.Extend=function(a){var b=this;b.ExtendObj||(b.ExtendObj=[]),b.ExtendObj.push(a),$.extend(a,c.Events)},
c.GoodsList=function(){
	var b=this,
	c=ServerAndGoodListData;
	"string"==typeof c&&(c=JSON.parse(c)),
	a.QueryCenterManage&&(b.QueryCenterManage=a.QueryCenterManage),
	a.HangqingManage&&(b.HangqingManage=a.HangqingManage),
	a.QueryCenterManage&&a.QueryCenterManage.Init(c.server.qyServers),
	a.HangqingManage&&a.HangqingManage.Init(c.server.hqServers,c.goodlists)
},
a.App=new b}(this);