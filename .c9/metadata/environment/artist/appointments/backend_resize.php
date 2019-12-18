{"changed":true,"filter":false,"title":"backend_resize.php","tooltip":"/artist/appointments/backend_resize.php","value":"<?php\nrequire_once '_db.php';\n\n$insert = \"UPDATE Appointment SET start = :start, end = :end WHERE id = :id\";\n\n$stmt = $db->prepare($insert);\n\n$stmt->bindParam(':start', $_POST['newStart']);\n$stmt->bindParam(':end', $_POST['newEnd']);\n$stmt->bindParam(':id', $_POST['id']);\n\n$stmt->execute();\n\nclass Result {}\n\n$response = new Result();\n$response->result = 'OK';\n$response->message = 'Update successful';\n\nheader('Content-Type: application/json');\necho json_encode($response);\n\n?>\n","undoManager":{"mark":-2,"position":1,"stack":[[{"start":{"row":3,"column":18},"end":{"row":3,"column":24},"action":"remove","lines":["events"],"id":2},{"start":{"row":3,"column":18},"end":{"row":3,"column":30},"action":"insert","lines":["Appointment "]}],[{"start":{"row":3,"column":29},"end":{"row":3,"column":30},"action":"remove","lines":[" "],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":3,"column":29},"end":{"row":3,"column":29},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":13,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1576678489048}