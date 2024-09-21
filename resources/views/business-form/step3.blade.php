<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 3 - Digital Strategy and Proficiency</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Styles for the header and form */
        .form-header {
            background-color: #005B9A;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
        }
        /*.progress-bar {*/
        /*    margin-bottom: 20px;*/
        /*}*/
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: normal;
        }
        .required::after {
            content: " *";
            color: red;
        }
        .bg-light {
            background-color: #f8f9fa;
        }

        .bg-white {
            background-color: #ffffff;
        }
        .progress {
            height: 25px;
        }

        .progress-bar {
            background-color: #007bff;
        }
        .navbar {
            background-color: #005B9A;
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .container {
            margin-top: 50px;
        }

    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Ministry of Information Communication and the Digital Economy</a>
        <small style="color: whitesmoke">Public Sector
            Digital Skills
            Baseline Assessment</small>
    </div>
</nav>
<div class="container">
    <!-- Ministry of ICT Header -->
    <h3>Stage 3: Digital Strategy and Proficiency</h3>

    <br>
    <!-- Progress Bar -->
    <div class="progress mb-4">
        <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
            Step 3 of 5
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('business.form.store') }}" method="POST">
        @csrf
        <input type="hidden" name="step" value="3">

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
            26
        </h5>
        <!-- Question 1: AI Awareness -->
        <div class="col-md-12 mb-3 bg-light">
            <label class="required">
                On a scale of 1 to 5, how aware are you of potential risks and ethical concerns associated with AI, such as algorithmic bias?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ai_awareness" id="ai_awareness_{{ $i }}" value="{{ $i }}" {{ (isset($data['ai_awareness']) && $data['ai_awareness'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="ai_awareness_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('ai_awareness')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
           27
        </h5>
        <!-- Question 2: Digital Data Organization -->
        <div class="col-md-12 mb-3 bg-white">
            <label class="required">
                How well can you find, pick, and organize different kinds of digital data and information?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>

                <p style="font-style: italic">

                Think about how you use digital tools like your computer, phone, or the internet. Are you good at finding what you need? Can you tell which details are really important and keep them in an order that helps you?
                <br>
                    <br>
                Scale:
                <br>1 - I often need help with simple searches, like using a search engine or finding a file on my computer or phone.
                <br>5 - I expertly use AI tools to search, select, and organize digital content and data in internal and public datasets. I can handle complex data sets, conduct predictive analysis, and manage extensive digital information.
                </p>
            </label>

            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="digital_data_organization" id="digital_data_organization_{{ $i }}" value="{{ $i }}" {{ (isset($data['digital_data_organization']) && $data['digital_data_organization'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="digital_data_organization_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('digital_data_organization')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
            28
        </h5>
        <!-- Question 3: Data Reliability -->
        <div class="col-md-12 mb-3 bg-light">
            <label class="required">
                Are you able to decide if information or data is reliable, accurate, and useful?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">
                Think about how you evaluate information and data you find online, on your phone, at work, or on other digital platforms. Can you tell if it's good quality and useful for your needs? How do you decide what information to trust and use?
                <br>
                    <br>
                Scale:
                <br>1 - I need assistance to know if some data or information is true or useful. For example, when I read news online, look at data, or see something on social media, I am unsure how to check if it's correct.
                <br>5 - I'm an expert in assessing digital information. I use advanced AI to analyze complex topics and cross-check information and data. Others often rely on me for these tasks. I'm skilled in statistical analysis and structuring AI queries for vetting information.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="data_reliability" id="data_reliability_{{ $i }}" value="{{ $i }}" {{ (isset($data['data_reliability']) && $data['data_reliability'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="data_reliability_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('data_reliability')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
        29
        </h5>
        <!-- Question 4: Data Organization -->
        <div class="col-md-12 mb-3 bg-white">
            <label class="required">
                How well can you manage and keep information and data organized and accessible?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">

                Think about your approach to handling files, documents, and data. Are you able to organize it for easy future use? Consider how you manage the storage and accessibility of digital content.
                <br>
                    <br>
                Scale:
                <br>1 - I need assistance organizing data and digital information. Sometimes, I know I have some information, but I cannot easily find it on my computer or phone, and I'm not used to using shared folders or online drives.
                <br>5 - I'm excellent at organizing and managing data and digital information. I use advanced methods like AI-driven categorization and efficient backup strategies on personal and shared platforms.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="data_organization" id="data_organization_{{ $i }}" value="{{ $i }}" {{ (isset($data['data_organization']) && $data['data_organization'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="data_organization_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('data_organization')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Question 5: Digital Communication -->
        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
        30
        </h5>
        <div class="col-md-12 mb-3 bg-light">
            <label class="required">
                Are you able to use digital technologies to communicate in personal and work settings?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">
                Think about how you use messaging apps, email, collaboration software, and video conferencing. Consider how you adapt your communication across different areas of your life, including with friends or at work.
                <br>
                    <br>
                Scale:
                <br>1 - I need assistance with using digital tools for communication, especially at work. I'm just learning to use software for collaboration, messaging, email, and video calls.
                <br>5 - I excel in using digital technologies for communication in any setting. I adapt easily across platforms, from professional tools to social networks. I use AI and advanced prompts for AI in communication and collaboration to create personalized, engaging, and impactful messages.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="digital_communication" id="digital_communication_{{ $i }}" value="{{ $i }}" {{ (isset($data['digital_communication']) && $data['digital_communication'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="digital_communication_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('digital_communication')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
          31
        </h5>
        <!-- Question: Sharing Information and Resources Online -->
        <div class="col-md-12 mb-3" style="background-color: #f9f9f9;">
            <label class="required">
                How effectively can you share information and resources online in different settings like home and work?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">
                Consider your approach to sharing documents, presentations, or other content. Do you think about the appropriate audience for each type of content and the best ways to share in various personal or professional contexts?
                <br>
                    <br>
                Scale:
                <br>1 - I need help sharing things like documents or images using technology, especially for work. I'm not sure about the best ways to share different things and how to decide who can see or use them.
                <br>5 - I excel in using digital technologies to share information and resources following defined data-handling policies and regulations. I'm good at picking the right platforms and controlling access for different audiences, including the public, in personal, educational, or professional settings.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="information_sharing" id="information_sharing_{{ $i }}" value="{{ $i }}" {{ (isset($data['information_sharing']) && $data['information_sharing'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="information_sharing_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('information_sharing')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
        32
        </h5>
        <!-- Question: Engaging with Citizens and Gathering Feedback -->
        <div class="col-md-12 mb-3" style="background-color: #e9f5ff;">
            <label class="required">
                How do you use digital technologies to engage with citizens and gather feedback on public services?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">
                Think about the digital tools and platforms you use to interact with the community and collect their input on services. Do you use online forums, social media, digital surveys, or other technologies to ensure active participation and response to citizen needs?
                <br>
                    <br>
                Scale:
                <br>1 - I have very limited experience with using digital technologies to engage with citizens. I am not familiar with the tools available to solicit feedback from the community effectively and rarely use them.
                <br>5 - I am highly proficient in using digital technologies to engage with citizens and gather their feedback on public services. I regularly utilize a variety of platforms such as online surveys, social media, and dedicated government apps to ensure comprehensive community involvement.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="citizen_engagement" id="citizen_engagement_{{ $i }}" value="{{ $i }}" {{ (isset($data['citizen_engagement']) && $data['citizen_engagement'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="citizen_engagement_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('citizen_engagement')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
     33
        </h5>
        <!-- Question: Collaborating Online in Group Projects -->
        <div class="col-md-12 mb-3" style="background-color: #f5f9f9;">
            <label class="required">
                How well can you collaborate with others online in group projects, tasks, or co-creating content?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">
                Consider your use of shared documents and online workspaces for teamwork. Do you effectively contribute, coordinate efforts, and ensure all viewpoints are considered and recognized?
                <br>
                    <br>
                Scale:
                <br>1 - I don't know/have very limited knowledge on how to collaborate digitally. Working on group projects or creating things together online is new to me. I need assistance to enable document sharing, coordinating tasks or activities.
                <br>5 - I lead in digital collaboration, using various advanced tools, including AI, for optimal collaboration and integrating different inputs most efficiently. I manage group tasks, use AI for data analysis to improve our work together, and guide my team in creating content efficiently.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="online_collaboration" id="online_collaboration_{{ $i }}" value="{{ $i }}" {{ (isset($data['online_collaboration']) && $data['online_collaboration'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="online_collaboration_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('online_collaboration')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
        34
        </h5>
        <!-- Question: Creating and Integrating Digital Content -->
        <div class="col-md-12 mb-3" style="background-color: #e9f7f9;">
            <label class="required">
                How effectively do you use software, online services, and apps to create and integrate digital content in various aspects of your life?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">
                Think about your experiences creating digital content like presentations, videos, or reports. How comfortable are you managing different media types, like text, images, audio, and video, to effectively communicate your message?
                <br>
                    <br>
                Scale:
                <br>1 - I don't know/have very limited knowledge of various digital tools. I need assistance with formats like spreadsheets, video, or audio.
                <br>5 - I excel in creating and integrating diverse multimedia content using advanced tools, productivity software, and multimedia apps. I am an expert at using Generative AI tools and advanced prompts to create personalized and engaging content in multiple formats.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="digital_content_creation" id="digital_content_creation_{{ $i }}" value="{{ $i }}" {{ (isset($data['digital_content_creation']) && $data['digital_content_creation'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="digital_content_creation_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('digital_content_creation')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
           35
        </h5>
        <!-- Question: Reworking Digital Content and Data -->
        <div class="col-md-12 mb-3" style="background-color: #f9f9f9;">
            <label class="required">
                How comfortable are you at reworking digital content and data into new forms to enhance their value or appeal?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">
                Think about your experiences with modifying existing digital content like articles, images, and videos and combining them with data. How do you create original or enhanced content by combining and reworking these elements?
                <br>
                    <br>
                Scale:
                <br>1 - I don't know/have very limited knowledge in combining different types of content and data.
                <br>5 - I excel at combining and reworking digital content and data in advanced ways, using various tools, including Generative AI. I create highly original works that blend text, visuals, and audio with complex data. I'm adept at AI-driven data visualization and content transformation, leading in digital creativity and storytelling.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="content_reworking" id="content_reworking_{{ $i }}" value="{{ $i }}" {{ (isset($data['content_reworking']) && $data['content_reworking'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="content_reworking_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('content_reworking')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
       36
        </h5>
        <!-- Question: Protecting Access to Digital Devices and Content -->
        <div class="col-md-12 mb-3" style="background-color: #f9f9f9;">
            <label class="required">
                How skilled are you in protecting access to digital devices and content, including online services and applications?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">
                Consider how you protect access to your computer, smartphone, and online accounts. Do you take measures against threats like viruses and unauthorized access? How do you maintain privacy and security in your digital activities?
                <br>
                    <br>
                Scale:
                <br>1 - I don't know/have very limited knowledge on how to keep my devices and online content safe. I'm not familiar with how to protect against digital threats and might need assistance. I don't often change privacy or security settings on my devices or online services.
                <br>5 - I excel in digital security, using advanced AI and cloud computing to protect devices and content. I understand cybersecurity threats deeply and use sophisticated techniques to prevent breaches. I lead in guiding others to implement top-level security measures and strategies.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="digital_security" id="digital_security_{{ $i }}" value="{{ $i }}" {{ (isset($data['digital_security']) && $data['digital_security'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="digital_security_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('digital_security')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
         37
        </h5>
        <!-- Question: Protecting Personal Data and Privacy -->
        <div class="col-md-12 mb-3" style="background-color: #f0f8ff;">
            <label class="required">
                How skilled are you in protecting personal data and privacy and following data regulations?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">
                Think about how you manage personal data in various settings like home, school, or work. Are you aware of how online services use your information? Are you aware of data regulations like GDPR or the Data Protection Act (ODPC), and do you follow compliance when handling data?
                <br>
                    <br>
                Scale:
                <br>1 - I don't know/have very limited knowledge about data privacy and its importance. I'm not familiar with how to protect personal data or the details of privacy policies and laws like GDPR.
                <br>5 - I excel in data protection and privacy, fully adhering to laws like the Data Protection Act (ODPC). I use advanced AI and tech solutions to secure data across online platforms and remove PII to ensure compliance. My expertise includes guiding others in data privacy best practices and compliance in various contexts.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="data_privacy" id="data_privacy_{{ $i }}" value="{{ $i }}" {{ (isset($data['data_privacy']) && $data['data_privacy'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="data_privacy_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('data_privacy')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
       38
        </h5>
        <!-- Question: Managing Digital Identity and Reputation -->
        <div class="col-md-12 mb-3" style="background-color: #f0f8ff;">
            <label class="required">
                How effectively do you manage your identity online (Digital Identity), including how you present yourself and protect your reputation online?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">
                Consider your activity on various digital platforms like social media, professional networks, online services, mobile apps, or places where you gather information. How do you manage the information you share, and are you mindful of how it affects your reputation and privacy?
                <br>
                    <br>
                Scale:
                <br>1 - I don't know/have very limited knowledge on how to manage my digital identity. I'm unsure how to present myself best online or protect my personal information or reputation. I don't often think about the impact of the data I share or create on different online services and mobile apps.
                <br>5 - I excel at handling multiple digital identities, maintaining a positive and secure online image. I use advanced digital and AI tools to safeguard my reputation, control my online footprint, and manage my data or the data and identity of others at home, school, or work.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="digital_identity" id="digital_identity_{{ $i }}" value="{{ $i }}" {{ (isset($data['digital_identity']) && $data['digital_identity'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="digital_identity_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('digital_identity')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
         39
        </h5>
        <!-- Question: Awareness of Environmental Impact of Technology -->
        <div class="col-md-12 mb-3" style="background-color: #e6ffe6;">
            <label class="required">
                How aware are you of the environmental impact of the technology you use?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">
                Consider the devices, software, apps, and online services you use. Are you mindful of their impact on the environment? How do you approach making your digital usage more environmentally sustainable?
                <br>
                    <br>
                Scale:
                <br>1 - I don't know/have very limited knowledge about digital technology having some impact on the environment. I don't know the details like how much energy my devices or online services use.
                <br>5 - I'm very knowledgeable in promoting environmental sustainability in digital technology. I use advanced AI to deeply understand and reduce environmental impacts. I lead efforts and advise others on selecting eco-friendly technologies, personally and professionally.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="environmental_impact" id="environmental_impact_{{ $i }}" value="{{ $i }}" {{ (isset($data['environmental_impact']) && $data['environmental_impact'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="environmental_impact_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('environmental_impact')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
        40
        </h5>
        <!-- Question: Confidence in Identifying and Solving Technical Problems -->
        <div class="col-md-12 mb-3" style="background-color: #e6f0ff;">
            <label class="required">
                How confident are you at identifying and solving technical problems with your devices, online services, apps, and software tools?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">
                Think about your approach to handling technical issues. How do you solve problems like malfunctioning apps, slow computers, internet issues, or accessing software online at home, school, or work?
                <br>
                    <br>
                Scale:
                <br>1 - I don't know/have very limited knowledge about simple tech fixes like restarting a device or checking if the internet is working.
                <br>5 - I excel in solving tricky tech problems in different digital settings, using advanced AI technologies for preventive maintenance or diagnosis in various systems at home, professionally, or in educational settings. I also teach others how to use effective troubleshooting methods and best practices to optimize system performance.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="technical_problems" id="technical_problems_{{ $i }}" value="{{ $i }}" {{ (isset($data['technical_problems']) && $data['technical_problems'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="technical_problems_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('technical_problems')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
       41
        </h5>
        <!-- Question: Capability in Identifying Challenges and Using Technology -->
        <div class="col-md-12 mb-3" style="background-color: #e6ffe6;">
            <label class="required">
                How capable are you at creatively identifying challenges and using technology to solve them?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">
                Think about approaching new challenges at home, school, or work. How do you combine common sense, systematic methods, and creative thinking to spot issues and then choose the right technological tools to address them?
                <br>
                    <br>
                Scale:
                <br>1 - I don't know/have very limited knowledge on how to spot simple problems and use basic online tools, software, and apps to create content and communicate with others.
                <br>5 - I excel in systematically spotting complex issues and innovatively using advanced technology, like AI, for solutions. I lead in devising and implementing groundbreaking tech strategies.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="creative_challenges" id="creative_challenges_{{ $i }}" value="{{ $i }}" {{ (isset($data['creative_challenges']) && $data['creative_challenges'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="creative_challenges_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('creative_challenges')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
          42
        </h5>
        <!-- Question: Proficiency in Communicating with AI Tools and Creating Solutions -->
        <div class="col-md-12 mb-3" style="background-color: #e6f7ff;">
            <label class="required">
                How proficient are you in effectively communicating with AI tools such as apps or chat agents to achieve desired results, or how competent are you in creating solutions using traditional software, low-code/no-code apps, or other AI tools?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">
                Think about your experience in using AI tools and creating software or applications. How do you use AI apps or chat agents, coding, or low-code/no-code tools to automate tasks, facilitate decision-making, or improve efficiency in various contexts like home, school, or work?
                <br>
                    <br>
                Scale:
                <br>1 - I have no/limited experience communicating with AI tools such as apps or chat agents or using low-code/no-code platforms.
                <br>5 - I excel at effectively communicating with AI tools using prompt engineering (designing effective prompts to guide AI systems) to build innovative applications and systems. I'm proficient in creating advanced digital solutions using AI, traditional programming, and low-code/no-code platforms. I lead projects, innovate solutions, and teach others in various environments.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ai_proficiency" id="ai_proficiency_{{ $i }}" value="{{ $i }}" {{ (isset($data['ai_proficiency']) && $data['ai_proficiency'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="ai_proficiency_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('ai_proficiency')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <h5 style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
           43
        </h5>
        <!-- Question: Knowledge of Technology and Improvement -->
        <div class="col-md-12 mb-3" style="background-color: #f2f9ff;">
            <label class="required">
                Do you know how to use technology, including AI, and where to improve?
                [Please rate skill-level on a scale of 1-5, with 1 representing "minimal knowledge or experience" and 5 representing "expert-level knowledge and confidence."]
                <br>
                <br>
                <p style="font-style: italic">
                Think about how you figure out what you need to learn about using computers, apps, online services, AI, and other tech. How do you keep up with new things in technology?
                <br>
                    <br>
                Scale:
                <br>1 - I don't know/have very limited knowledge on what I can do with technology. I need help learning more and understanding where to focus my learning efforts.
                <br>5 - I deeply understand different technologies and trends and how new developments will impact my career, personal life, and society. I'm always up-to-date with the latest tech advancements, including AI, and I actively mentor others in using technology effectively.
                </p>
            </label>
            <div class="d-flex justify-content-between">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tech_knowledge" id="tech_knowledge_{{ $i }}" value="{{ $i }}" {{ (isset($data['tech_knowledge']) && $data['tech_knowledge'] == $i) ? 'checked' : '' }}>
                        <label class="form-check-label" for="tech_knowledge_{{ $i }}">{{ $i }}</label>
                    </div>
                @endfor
            </div>
            @error('tech_knowledge')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>




        <!-- Navigation Buttons -->
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('business.form.step',2) }}" class="btn btn-secondary">Previous</a>
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
    </form>

</div>



<style>
    .highlight {
        border-color: red !important;
    }
</style>

</body>
</html>
