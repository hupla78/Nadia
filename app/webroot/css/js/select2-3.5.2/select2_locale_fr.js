(function(a){a.fn.select2.locales.fr={formatMatches:function(b){return b+" résultats sont disponibles, utilisez les flèches haut et bas pour naviguer."},formatNoMatches:function(){return"Aucun résultat trouvé"},formatInputTooShort:function(b,c){var d=c-b.length;return"Saisissez "+d+" caractère"+(d==1?"":"s")+" supplémentaire"+(d==1?"":"s")},formatInputTooLong:function(c,b){var d=c.length-b;return"Supprimez "+d+" caractère"+(d==1?"":"s")},formatSelectionTooBig:function(b){return"Vous pouvez seulement sélectionner "+b+" élément"+(b==1?"":"s")},formatLoadMore:function(b){return"Chargement de résultats supplémentaires…"},formatSearching:function(){return"Recherche en cours…"}};a.extend(a.fn.select2.defaults,a.fn.select2.locales.fr)})(jQuery);