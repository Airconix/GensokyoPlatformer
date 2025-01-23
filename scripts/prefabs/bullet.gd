extends Area2D
var direction := 1
var speed = 100

func _process(delta):
   position.x += speed * direction * delta
