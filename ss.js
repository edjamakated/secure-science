function ajaxRequest(method, url, data, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open(method, url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            callback(JSON.parse(xhr.responseText));
        }
    };
    xhr.send(data);
}

function getAllProjects(callback) {
    ajaxRequest('GET', 'project_management.php?action=getAll', null, callback);
}

function createProject(name, description, callback) {
    ajaxRequest('POST', 'project_management.php?action=create', 'name=' + encodeURIComponent(name) + '&description=' + encodeURIComponent(description), callback);
}

// Add similar functions for other features
