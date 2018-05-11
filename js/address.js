      function getBuilding(householder) {
            var building = document.addForm.building;
            var length = householder.length;
            var index = 1;
            for (var i = 0; i < length; i++) {
                var len = building.length;
                var contain = false;
                var buildingtext = householder[i][0];
                for (var j = 0; j < len; j++) {
                    if (building.options[j].text == buildingtext) {
                        contain = true;
                    }
                }
                if (!contain) {
                    building[index++] = new Option(buildingtext, buildingtext);
                }
            }    
        }    
        function getUnit(householder){ 
            var building = document.addForm.building;
            var unit = document.addForm.unit; 
            unit.selectedIndex = 0; 
            unit.length = 1;
            var length = householder.length;
            var index = 1;
            var buildingtext = building.options[building.selectedIndex].text;
            for (var i = 0; i < length; i++) {
                if (householder[i][0] != buildingtext) continue;
                var len = unit.length;
                var contain = false;
                var unittext = householder[i][1];
                for (var j = 0; j < len; j++) {
                    if (unit.options[j].text == unittext) {
                        contain = true;
                    }
                }
                if (!contain) {
                    unit[index++] = new Option(unittext, unittext);
                }
            } 
        } 
        function getRoom(householder) {
            var building = document.addForm.building;
            var unit = document.addForm.unit; 
            var room = document.addForm.room;
            room.length = 1;
            room.selectedIndex = 0;
            var length = householder.length;
            var index = 1;
            var buildingtext = building.options[building.selectedIndex].text;
            var unittext = unit.options[unit.selectedIndex].text;
            for (var i = 0; i < length; i++) {
                if (householder[i][0] != buildingtext || householder[i][1] != unittext) continue;
                var len = room.length;
                var contain = false;
                var roomtext = householder[i][2];
                for (var j = 0; j < len; j++) {
                    if (room.options[j].text == roomtext) {
                        contain = true;
                    }
                }
                if (!contain) {
                    room[index++] = new Option(roomtext, roomtext);
                }
            } 
        }