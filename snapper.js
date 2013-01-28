function timedRefresh(timeoutMinutes)
{
	t = timeoutPeriod * 1000 * 60;
	setTimeout("location.reload(true);", t);
}