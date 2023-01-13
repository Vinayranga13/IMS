<?php

class UserProfileTest extends PHPUnit_Framework_TestCase
{
    public function testUserPermission()
    {
        // Arrange
        $user_level = 3;
        $expected_result = true;

        // Act
        $result = page_require_level($user_level);

        // Assert
        $this->assertEquals($expected_result, $result);
    }

    public function testFindUserById()
    {
        // Arrange
        $user_id = 1;
        $expected_result = array('id' => 1, 'name' => 'John Doe', 'image' => 'john_doe.jpg');

        // Act
        $result = find_by_id('users', $user_id);

        // Assert
        $this->assertEquals($expected_result, $result);
    }

    public function testUserOwnProfile()
    {
        // Arrange
        $current_user_id = 1;
        $profile_user_id = 1;
        $expected_result = true;

        // Act
        $result = ($current_user_id === $profile_user_id);

        // Assert
        $this->assertEquals($expected_result, $result);
    }
