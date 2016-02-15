Feature: User Module
  In order to be sure that User modules works properly
  As a website user
  I need to be able to list/add/edit/delete Users

  Background: Login and go to User Module
    Given I am on "/auth/login"
    And I fill in "email" with "pawanshr@gmail.com"
    And I fill in "password" with "pawanshr"
    And I press "submit"
    And the url should match "/home"
    And I follow "User"
    Then the url should match "/user"
    And I should see "List of Users"

  @mink:selenium2
  Scenario: Create new User
    Given I follow "Create New User"
    And the url should match "/user/create"
    And I should see "Create New User"
    When I fill in "name" with "Test User"
    And I fill in "email" with "testemail@test.com"
    And I fill in "password" with "tttt"
    And I fill in "password_confirmation" with "tttt"
    And I press "submit"
    Then the url should match "/user"
    And I should see "Test User"
    And I should see "testemail@test.com"

  @mink:selenium2
  Scenario: Edit User
    Given I follow "testemail@test.com"
    And I should see "Edit User"
    When I fill in "name" with ""
    And I fill in "name" with "Test User Edited"
    And I press "submit"
    Then the url should match "/user"
    And I should see "Test User Edited"
    And I should see "testemail@test.com"

  @mink:selenium2
  Scenario: Edit User making form fields blank should fail
    Given I follow "testemail@test.com"
    And I should see "Edit User"
    And I fill in "name" with ""
    And I fill in "email" with ""
    When I press "submit"
    Then I should see "The name field is required."
    And I should see "The email field is required."

  @mink:selenium2
  Scenario: Create User with blank form should fail
    Given I follow "Create New User"
    And the url should match "/user/create"
    And I should see "Create New User"
    When I press "submit"
    Then the url should match "/user/create"
    And I should see "The name field is required."
    And I should see "The email field is required."
    And I should see "The password field is required."

  @mink:selenium2
  Scenario: Delete User
    When I press "delete_testemail@test.com"
    Then I should not see "Test User Edited"
    And I should not see "testemail@test.com"