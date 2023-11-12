function replaceLink(url) {
    const link = document.getElementById("login-link");
    link.href = url + getQuery();
}

function jumpTo(url) {
    location.href = url + getQuery();
}

function getQuery() {
    return location.search;
}

var dbClick = null;

function doubleClickCheck() {
  const button = document.getElementById('fm1');
  button.disabled = true;
  setTimeout(function() {
    button.disabled = false;
  }, 3000);

  if (dbClick == null) {
    dbClick = 1;
    return true;
  } else {
    return false;
  }
}