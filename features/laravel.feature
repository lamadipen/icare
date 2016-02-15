Feature: Laravel
  In order to be sure that correct website rendered
  As a website user
  I need to be able to search for a word in homepage

  @mink:selenium2
  Scenario: Searching if word Laravel exists in the homepage
    Given I am on homepage
    Then I should see "Laravel 5"

  @mink:selenium2
  Scenario: Testing if authentication is forced when inner pages are tried browsing directly
    Given I am on "/user"
    Then the url should match "/auth/login"