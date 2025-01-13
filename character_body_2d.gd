extends CharacterBody2D
class_name Player
@export var SPEED = 300.0
@export var JUMP_VELOCITY = -500.0
@onready var bullet_path = preload("res://prefabs/bullet.tscn")

func die():
	GameManager.respawn_player()

func shoot():
		var b = bullet_path.instantiate()
		b.transform = $Muzzle.global_transform
		owner.add_child(b)


func _ready():
	GameManager.player = self

func _physics_process(delta: float):
	# Add the gravity.
	if not is_on_floor():
		velocity += get_gravity() * delta

	# Handle jump.
	if Input.is_action_just_pressed("ui_accept") and is_on_floor():
		velocity.y = JUMP_VELOCITY
		
	if Input.is_action_just_pressed("shoot"):
		shoot()

	# Get the input direction and handle the movement/deceleration.
	# As good practice, you should replace UI actions with custom gameplay actions.
	var direction := Input.get_axis("ui_left", "ui_right")
	if direction:
		velocity.x = direction * SPEED
	else:
		velocity.x = move_toward(velocity.x, 0, SPEED)

	move_and_slide()
	
	if position.y >= 600:
		die()
		


	
