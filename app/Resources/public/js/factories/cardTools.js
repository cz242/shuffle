/**
 * Created by Zhengdalu on 15-7-29.
 */

app.factory('CardTools',[function() {
    var cardTools = {};
    cardTools.numberToCard = function(number) {
     //   if (!angular.isNumber(number)) return null;
        if (number<1 || number>54) return null;
        var card = {suit: null, point: null};
        if (number == 53) {
            card.suit = 'BlackJoker';
            return card;
        }
        if (number == 54) {
            card.suit = 'RedJoker';
            return card;
        }
        var suitNum = parseInt((number-1) / 13);
        switch (suitNum) {
            case 1:
                card.suit = 'Spade';
                break;
            case 2:
                card.suit = 'Heart';
                break;
            case 3:
                card.suit = 'Diamond';
                break;
            case 0:
                card.suit = 'Club';
                break;
        }
        var point = (number ) % 13;
        card.point = point;
        if (point == 11) card.point = 'J';
        if (point == 12) card.point = 'Q';
        if (point == 0) card.point = 'K';
        if (point == 1) card.point = 'A';
        return card;
    };
    return cardTools;
}]);