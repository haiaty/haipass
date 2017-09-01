Feature: Password display
  In order to remenber my password
  As a guest user
  I want to fill out the form with my data and see my password

  #some gotchas: sometimes the render of vue components is slower than the execution of the php method. so we need to wait some moment. this is why
  #you might see some "i wait x seconds" assertion
  @javascript
  Scenario: User sees the homepage
    Given I am on the homepage
    Then I should see "Passwords forti mai più dimenticate!"
    And should not see "password-ctnr"

  #I have added the tag craftpassword in order to run behat only for these scenarios and not all scenarios
  @javascript @craftpassword
  Scenario: User fill only the name of the webapp and see the password
    Given I am on "/craft"
    When I fill in "web_app" with "facebook"
    And I fill in "pass_phrase" with "i have decided"
    And I press "show-my-pass-btn"
    And I wait "3" seconds
    Then the "password-result" field should contain "I1026d90D228156cfk8+20?%"

  @javascript @craftpassword
  Scenario: User fill full url in the webapp field and see the password
    Given I am on "/craft"
    When I fill in "web_app" with "http://www.facebook.com"
    And I fill in "pass_phrase" with "i have decided"
    And I press "show-my-pass-btn"
    And I wait "3" seconds
    Then the "password-result" field should contain "I1026d90D228156cfk8+20?%"

  @javascript @craftpassword
  Scenario: User fill partial url in webapp field and see the password
    Given I am on "/craft"
    When I fill in "web_app" with "http://facebook.com"
    And I fill in "pass_phrase" with "i have decided"
    And I press "show-my-pass-btn"
    And I wait "3" seconds
    Then the "password-result" field should contain "I1026d90D228156cfk8+20?%"

  @javascript @craftpassword
  Scenario: User fill inputs with case
    Given I am on "/craft"
    When I fill in "web_app" with "FACEBOOK"
    And I fill in "pass_phrase" with "I HAVE DECIDED"
    And I press "show-my-pass-btn"
    And I wait "3" seconds
    Then the "password-result" field should contain "I1026d90D228156cfk8+20?%"

