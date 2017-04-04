<html>
    <body>

    <h1>Yhteystietojen kerääminen</h1>

    <!-- HTML lomake -->
    <!-- method = kertoo lähetysmuodon (post/get) -->
    <!-- action = tiedoston nimi tai osoite joka käsittelee tiedon -->
    <form method="post" action="rivien_lisaaminen.php">
        <p>Anna etunimesi:
            <input type="text" name="etunimi" required="true"/>
        </p>
        <p>Anna sukunimesi:
            <input type="text" name="sukunimi"/>
        </p>
        <!-- type=submit kertoo että on painike -->
        <input type="submit" name="Submit" value="Laheta" />
        <input type="reset" name="Reset" value="Tyhjennä" />
    </form>
    <p><a href="tulosta_henkilot.php">Näytä henkilöt</a></p>
    </body>
</html>