(function(a){a.fn.select2.locales.nb={formatMatches:function(b){if(b===1){return"Ett resultat er tilgjengelig, trykk enter for å velge det."}return b+" resultater er tilgjengelig. Bruk piltastene opp og ned for å navigere."},formatNoMatches:function(){return"Ingen treff"},formatInputTooShort:function(b,c){var d=c-b.length;return"Vennligst skriv inn "+d+(d>1?" flere tegn":" tegn til")},formatInputTooLong:function(c,b){var d=c.length-b;return"Vennligst fjern "+d+" tegn"},formatSelectionTooBig:function(b){return"Du kan velge maks "+b+" elementer"},formatLoadMore:function(b){return"Laster flere resultater …"},formatSearching:function(){return"Søker …"}};a.extend(a.fn.select2.defaults,a.fn.select2.locales.no)})(jQuery);