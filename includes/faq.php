<h3>Veelgestelde Vragen</h3>

<details>
    <summary>Wat zijn de bezorgopties?</summary>
    Je kunt kiezen uit standaard, express of avondbezorging.
</details>

<details>
    <summary>Wat gebeurt er als ik niet thuis ben?</summary>
    De bezorger laat een kaartje achter of levert het bij de buren.
</details>

<details>
    <summary>Moet ik betalen voordat ik mijn bestelling kan plaatsen?</summary>
    <p>Ja, we vragen je om de betaling direct te doen zodat we je bestelling snel kunnen verwerken. Maar
        maak je geen zorgen, we accepteren alle gangbare betaalmethoden. En alles is 100% veilig, dat
        beloven we!</p>
</details>

<details>
    <summary>Hoe weet ik of mijn bestelling succesvol is geplaatst?</summary>
    <p>Zodra je het formulier hebt ingediend, ontvang je een bevestigingsmail. Hierin staat alles over
        je bestelling, van het product tot je gekozen verzendopties. Als je geen bevestigingsmail
        krijgt, neem dan even contact met ons op – misschien is er iets mis gegaan!</p>
</details>

<details>
    <summary>Kan ik mijn bestelling nog wijzigen?</summary>
    <p>Als je je bestelling wilt wijzigen, probeer het dan zo snel mogelijk! We doen ons best om de
        verwerking direct te starten, maar mocht dat niet mogelijk zijn, kun je altijd contact met ons
        opnemen voor een oplossing.</p>
</details>

<details>
    <summary>Hoe snel wordt mijn bestelling verzonden?</summary>
    <p>Afhankelijk van de verzendmethode die je kiest, kan het een paar werkdagen duren. Als je dringend
        iets nodig hebt, kies dan voor expressverzending! We doen ons best om het zo snel mogelijk bij
        je te krijgen.</p>
</details>

<details>
    <summary>Wat gebeurt er als ik niet thuis ben om mijn bestelling te ontvangen?</summary>
    <p>Geen zorgen. Als je niet thuis bent, zal de bezorger het pakket bij de buren afleveren of een
        kaartje achterlaten zodat je het kunt ophalen. Je kunt altijd het pakket volgen via de track &
        trace link die je van ons ontvangt.</p>
</details>
<script>
    // Selecteer alle details-elementen
    const detailsElements = document.querySelectorAll('details');

    // Voeg een event listener toe voor elk details-element
    detailsElements.forEach((details) => {
        details.addEventListener('toggle', () => {
            // Als het huidige details-element geopend is
            if (details.open) {
                // Sluit alle andere details-elementen
                detailsElements.forEach((otherDetails) => {
                    if (otherDetails !== details) {
                        otherDetails.removeAttribute('open');
                    }
                });
            }
        });
    });
</script>