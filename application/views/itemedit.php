<h2>Task # {id}</h2>
<form role="form" action="/mtce/submit" method="post">
    {ftask}
    {fpriority}
    {fsize}
    {fgroup}
    {fstatus}
    <br>
    {zsubmit}
    <br><br>
    <a href="/mtce/cancel"><input type="button" value="CANCEL THE CURRENT EDIT"/></a>
    <br><br>
	<a href="/mtce/delete"><input type="button" value="DELETE THIS TODO ITEM"/></a>
	<br><br>
</form>