<table>
{
	for $x in doc("books.xml")/bookstore/book
	return 
	<tr>
		<td>
			{data($x/title)}
		</td>
	</tr>
}
</table>