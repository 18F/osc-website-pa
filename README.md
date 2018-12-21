# GSA OSC Web Presence

## Project Description
18F will work to understand how GSA websites and systems are currently structured, evaluate user needs and challenges, and conduct a review of GSA’s overall digital presence. 18F will then define a strategy and roadmap for how to address the most pressing challenges with the current information architecture of GSA’s websites, ultimately driving towards a simplified site structure that better resonates with users. 

Following the path analysis, 18F will prepare a synthesis of findings as well as preliminary recommendations identifying the next steps towards developing the requirements for FAS to acquire a solution for OSC.  

During this phase, 18F will provide GSA OSC with the following:

- Problem definition and potential partner impact: The explicit objectives to achieve the organization’s goal(s), based upon an investigation, and the level of impact felt by the Requesting Agency or their user base.
- Strategy, recommendations, and concept: A stated approach to achieve an outcome based on the organization’s unique position, including but not limited to its mission, context, resources, and risks.
- When appropriate, limited prototypes, wireframes, data, or other documents generated by 18F.

## 18F Team

- T. Carter Baxter, Front End Engineer, [@tbaxter-18F](https://github.com/tbaxter-18f)
- Ron Bronson, Service Designer & Project Lead, [@quarterback](https://github.com/quarterback)
- Jeff Durland, Content Designer, [@durland18F](http://github.com/durland18F)
- Austin Hernandez, Visual Designer, [@austinhernandez](http://github.com/austinhernandez)
- Olesya Minina, Engagement Manager, [@ominina](https://github.com/ominina)
- Torey Vanek, Product Manager, [@toreyvanek1](https://github.com/toreyvanek1)
- Scott Weber, Front End Engineer, [@line47](https://github.com/line47)

## Project Alumni 
- Eleni Gesch-Karmandalis, Strategist
- Corey Mahoney, Strategic Advisor

## GSA Partners
- Justin Ward, GSA Office of Strategic Communications
- Sarah Bryant, GSA Office of Strategic Communications
- Anahita Reilly, GSA Chief Customer Officer
- Matthew Ford, Assistant GSA Chief Customer Officer

## 18F Team Process

- **Stand-ups**: Daily,[osc-gsa-web-presence][slack-channel] 12:00pm EST
- **Weekly Updates**: Update document during the week, submit on Fridays. You can
  find all the weekly update documents in the [`weekly-update`
  directory](./weekly-update).
- **Tracking work**: [Github Projects](https://github.com/18F/osc-website-pa/projects) (note that since this is an 8 week engagement, we are breaking up our work into 1 week sprints)
- **OSC + 18F check ins**: Weekly video meeting with client, Fridays 11-1130am ET
- **CPS + 18F check-ins**: weekly to discuss budget and overall progress/blockers
- **Retrospectives**: Weekly


## Setting up local development

Local development is based heavily on [CircleCI's Docker + Drupal deployment guide](https://circleci.com/blog/continuous-drupal-p1-maintaining-with-docker-git-composer/).

Once you've pulled down this repo, `cd` into it, and then, 
from the root of the directory, run:

```docker-compose up -d --build```

which tells Docker Compose to do a fresh build of the enclosed Dockerfile.

That should create a container called `osc-website-pa_drupal_1` on port :80. 
You can confirm by running `docker-compose ps` and viewing the output. 
You want the container on :80, whatever it may be called.

Then run
```docker exec -it osc-website-pa_drupal_1 bash```
which starts the container, opens a `bash` shell, and drops you into the `apps` directory.
From there, you'll use composer to install Drupal:

```
composer create-project drupal-composer/drupal-project:8.x-dev /app --stability dev --no-interaction
```


