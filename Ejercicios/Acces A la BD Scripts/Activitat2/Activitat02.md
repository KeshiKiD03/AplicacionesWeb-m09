<!DOCTYPE html>
<html>
    <body>
        <h1> Crear llibre </h1>
            <FORM METHOD=POST ACTION="creallibre.php">
            <table>
                <tr>
                    <td>Id</td>
                    <td><INPUT TYPE=TEXT NAME="id" VALUE="" SIZE=32 MAXLENGTH=128></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><INPUT TYPE=TEXT NAME="nom" VALUE="" SIZE=32 MAXLENGTH=128></td>
                </tr>
                <tr>
                <td>Autor</td>
                    <td><INPUT TYPE=TEXT NAME="autor" VALUE="" SIZE=32 MAXLENGTH=128></td>
                </tr>
                <tr>
                    <td>ISBN</td>
                    <td ><INPUT TYPE=TEXT NAME="isbn" VALUE="" SIZE=32
                    MAXLENGTH=32></td>
                </tr>
                <tr>
                    <td>Puntuació</td>
                    <td>
                    <SELECT NAME="puntuacio">
                        <OPTION SELECTED VALUE=1> 1
                        <OPTION VALUE=2> 2
                        <OPTION VALUE=3> 3
                        <OPTION VALUE=4> 4
                        <OPTION VALUE=5> 5
                    </SELECT>
                    </td>
                </tr>
                <tr>
                    <td>Genere</td>
                    <td><INPUT TYPE=TEXT NAME="genere" VALUE="" SIZE=32 MAXLENGTH=128></td>
                </tr>
                <tr>
                    <td></td>
                    <td><INPUT TYPE=SUBMIT>
                        <INPUT TYPE=RESET></td>
                </tr>
            </table>
            </FORM>
    </body>
</html>
