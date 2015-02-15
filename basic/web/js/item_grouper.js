/**
 * Utility object for adding and removing items
 * from a group of items.
 */

//Constructor.
function ItemSelector(params) {
	this.groupId = params.groupId;
	this.searchUrl = params.searchUrl;
	this.contentUrl = params.contentUrl;
	this.addUrl = params.addUrl;
	this.removeUrl = params.removeUrl;
	this.availableSection = $("#" + params.availableSectionId);
	this.contentSection = $("#" + params.contentSectionId);
	this.availableSection.on("click", "button", $.proxy(this.add, this));
	this.contentSection.on("click", "button", $.proxy(this.remove, this));
}

//Adds an item to the group.
ItemSelector.prototype.add = function() {
	var ajaxParams = {
		'gid':this.groupId,
		'iid':$(event.target).val()
	};
	$.post(this.addUrl, ajaxParams, $.proxy(function(data) {
		this.writeControls(this.contentSection, data);
	}, this), 'json');
	$(event.target).hide();
}

//Displays current group content.
ItemSelector.prototype.content = function() {
	var ajaxParams = {
		"id":this.groupId
	};
	$.get(this.contentUrl, ajaxParams, $.proxy(function(data) {
		this.writeControls(this.contentSection, data);
	}, this), 'json');
}

//Removes an item from a group.
ItemSelector.prototype.remove = function() {
	var eValue = $(event.target).val();
	var ajaxParams = {
		'gid':this.groupId,
		'iid':eValue
	};
	$.post(this.removeUrl, ajaxParams, $.proxy(function(data) {
		this.writeControls(this.contentSection, data);
		this.search();
	}, this), 'json');
}

//Searches for available items.
ItemSelector.prototype.search = function() {
	console.log('searching');
	var ajaxParams = {
		"id":this.groupId
	};
	$.get(this.searchUrl, ajaxParams, $.proxy(function(data) {
		console.log(data);
		this.writeControls(this.availableSection, data);
	}, this), 'json');
}

//Writes the controls.
ItemSelector.prototype.writeControls = function(section, data) {
	var buttons = '';
	var that = this;
	$.each(data, function(index, value) {
		buttons += '<button class="btn btn-info btn-block" value="' + value['id'] + '">' + value['name'] + '</button>';
	})
	section.html(buttons);
}