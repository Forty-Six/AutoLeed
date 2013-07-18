
function FS_AutoLeed_refresh(timePaused) {
  
	if (timePaused) setTimeout('location.reload(true);', timePaused);
}

FS_AutoLeed_refresh( 600000 );
