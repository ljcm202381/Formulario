<?php
// Genera el número de cajas de texto y botones radio a mostrar
$numero = rand(1, 10);

// Bucle para generar las cajas de texto y los botones radio
for ($i = 1; $i <= $numero; $i++) {
    print "      <tr>\n";
    print "        <td>$i</td>\n";
    // Los nombres de los controles son dos matrices (c[] y b())
    // En cada fila el name del botón radio es el mismo (para que formen un botón radio)
    // pero el value es distinto (h o m)
    print "        <td><input type=\"text\" name=\"c[$i]\" size=\"30\"></td>\n";
    print "        <td><label><input type=\"radio\" name=\"b[$i]\" value=\"h\">Hombre</label></td>\n";
    print "        <td><label><input type=\"radio\" name=\"b[$i]\" value=\"m\">Mujer</label></td>\n";
    print "      </tr>\n";
}
?>
    </table>

    <p>
      <input type="submit" value="Contar">
      <input type="reset" value="Borrar">
    </p>
  </form>

?>