extends Node


func _on_area_2_area_entered(area: Area2D) -> void:
	if area.get_parent() is Player:
		area.get_parent().die()
