function timedRefresh(timeoutMinutes)
{
	t = timeoutMinutes * 1000 * 60;
	setTimeout("location.reload(true);", t);
}