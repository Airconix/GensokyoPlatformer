extends Area2D

var speed = 100

func _physics_process(delta):
   global_position += global_transform.x * speed * delta
