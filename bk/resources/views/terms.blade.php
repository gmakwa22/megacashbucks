@extends('layout.layout')

@section('content')



@include('global.homebanner')

<div class="team-deatails-area pb-60">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="biography-box">
					<div class="biography-title" id="custlink">
						<h2>ACCEPTANCE OF THE TERMS OF USE</h2>
            <p style="text-align: justify;">These are the terms and conditions for use of the <a href="{{ $privurl }}">{{ $privurl }}</a> (“the Company”) website and all of its services. By using this website, you acknowledge that you will abide by are are bound by these Terms of Use (“Terms”) as well as our Privacy Policy (“Privacy Policy”). If you do not agree with the Terms or Privacy Policy, you must discontinue use of the Website forthwith.</p>
            <p>  <strong>ACCOUNT SECURITY AND USE OF THE WEBSITE</strong><br /></p>
            <p style="text-align: justify;">
              To use this Website and the services offered, you may be asked to provide personal information for registration or other services. You hereby agree that any and all information you provide is current, complete and accurate.
              If you receive a user name, password or other information, such information it is understood to be confidential, and you agree not to disclose it to any third party. You must notify the company immediately of any breach of such personal information or unauthorized use of your name or password.You must take care in accessing your account from public or non-secured computers, that your password or personal information is not viewed or observed, and you will also take care to exit the account at the end of each session. We reserve the right, at the Company’s discretion, to cancel or disable any user password or I.D. if a user has been found to have failed to comply with these security terms.
              Anyone accessing the Website through your internet connection must be made aware of these Terms, as you are responsible for them and the use of the site.  The Company reserves the right to amend, adapt, or discontinue any material or service that is provided on the Website, at any time without notice. The Company shall also not be held responsible or liable should the User be unable to access the Website at any time, and the company has the right to restrict use of the Website, or any part of it, to any and all users, at their discretion.
            </p>
            <p><strong>USES THAT ARE PROHIBITED</strong><br /></p>
            <p style="text-align: justify;">
              You agree not to use the Website in any way that violates applicable provincial, local, federal, and international law and regulations, and in particular laws that govern and restrict the use and export of software and data between countries.
              You will not knowingly download, upload or receive any material that does not comply with these Terms of Use, or use or re-use such material. You will not use this Website or its materials or services to harm, exploit, or attempt to exploit minors in any way. You will not attempt to impersonate the Company or its employees, or another person, entity, or user, or use their email addresses. You will not transmit or facilitate the sending of any promotional or advertising material, spam, junk mail, chain letters, or other unsolicited materials. You will not take any actions that inhibit or restrict the use of the Website for others, which could harm the Company or its Users, or cause them liability.
              Furthermore, you will not use any software, device, or application, or take any action, that interferes with the normal working of the Website; nor will you use the Website in any way that could harm, disable, or impair the site. Nor will you negatively affect or harm other Users access and use of the Website.
              You shall not introduce any viruses, worms, logic bombs, or other damaging or malicious materials that are technologically harmful; or use robots, spiders or other automatic devices to monitor or copy materials on the Website. You shall not attempt to disrupt or damage any parts of the Website, or the server on which the Website is stored, or any computer or database connected to the Website. You shall not copy any material on the website without written consent, or try to impair its functioning via a denial-of-service attack or a distributed denial-of-service attack; and you shall not in any way try to interfere with the proper working of the Website.
            </p>
          <p>  <strong>TRADEMARKS</strong><br /></p>
            <p style="text-align: justify;">All materials on the Website are protected as trademarks, copyrights, and  intellectual property owned by the Company, or are owned by other parties licensing materials to the Company. Any use of these materials is therefore prohibited and may not be downloaded, copied, used, reproduced, distributed, or modified in any way prior to receiving written permission from the Company.</p>
          <p>  <strong>INTELLECTUAL PROPERTY RIGHTS</strong><br /></p>
            <p style="text-align: justify;">
              You may use the Website for personal and non-commercial use only. The Website and all its features and functionality, including text, software, images, displays, design, video and audio, are owned by the Company and its Licensors, and as such are protected by international patent, trademark, copyright, trade secret and other proprietary and intellectual property rights laws.
              You acknowledge you will not modify, copy, adapt, republish, download, adapt, store, publicly display or transmit any of the material on this site, except to either: store copies of said materials temporarily for operations permitted under these Terms of use, store files automatically cached by your Web browser for permitted display enhancement purposes; store and print copies of documents and records related to loan agreements you enter into with the Company, in compliance with the agreement and applicable law and these Terms of use; or to print a limited number of pages of the Website, if instructed to do so as part of the business of the Website.
              You must not under any conditions sell, reproduce, or exploit any part of the Website for commercial purposes, or use any photographs, illustrations, graphics, audio, video or audio from the site, or modify materials from the site, or alter any trademark, copyright or other proprietary rights notices or materials from this site. If engaged in such actions, you must cease immediately, and return or destroy any copies of materials made.All rights and title to all and any content on the Website is the property of the Company and any use of that content is a violation of trademark and copyright laws, and as such is a breach of these Terms of Use.
            </p>
          <p><strong>WEBSITE CHANGES</strong><br /></p>
          <p style="text-align: justify;">  The Company may make changes at any time to the Website without notice, and may make changes, adaptations or updates to the Website from time to time. But the Company is under no obligation to update, adapt, renew or change material at any time, other than at the Company’s discretion, and may close or suspend access to the Website at any time at its discretion.</p>
          <p>  <strong>TERMS OF USE CHANGES</strong><br /></p>
            <p style="text-align: justify;">The Company may update or revise its Terms at any time, and it is the obligation of the Users of the Website to check this page periodically and take note of any changes made, as their continued use of the Website constitutes acceptance of any revised Terms of Use.</p>
            <p><strong>ACCURACY OF WEBSITE INFORMATION</strong><br /></p>
            <p style="text-align: justify;">Website information is provided solely for information purposes and the Company does not warrant the completeness or accuracy of this information, and disclaims any responsibility or liability arising from reliance placed on such materials, by Users, Visitors, or 3rd parties informed of its materials.</p>
            <p><strong>LINKS WITH THE WEBSITE</strong><br /></p>
            <p style="text-align: justify;">The Company reserves the right to suspend all linking privileges at its sole discretion. Furthermore, the Company has no control over the content of sites that may link with our site, and thus cannot be responsible for any problems, issues or losses that may occur from visiting one of these sites. If you decide to visit one of these sites, you assume full responsibility for any damages that may occur from that visit. You are allowed to link with our site homepage, subject to doing so in a manner that does not cause damages to our business or reputation, or in a way that implies an association with our Website and business, or implies an endorsement by us. You may not link from a website that does not belong to you, and in the event an unauthorized link is detected by our staff, you must disable said link immediately upon notice.</p>
          <p>  <strong>PRIVACY POLICY AND INFORMATION</strong><br /></p>
            <p style="text-align: justify;">Your use of this site implies that all information you have provided us is factual and accurate, and implies your consent to any actions taken by us that pertains to the use of your information, as defined by our Privacy Policy.</p>

            <p><strong>LIMITS ON LIABILITY</strong><br /></p>
            <p style="text-align: justify;">The company, its service providers, agents, officers, directors, and affiliates, shall under no circumstances be liable for damages of any kind, arising out of claims based on inability to use the website, its services, or sites linked to it, or claims of damages from use of the site, whether the damages claimed be special, incidental, direct, indirect, punitive, or consequential, or personal injury, emotional distress, loss of revenue or profits, loss of data, loss of goodwill, loss of business or anticipated savings, negligence, or breach of contract.</p>

            <p><strong>WARRANTIES DISCLAIMER</strong><br /></p>
            <p style="text-align: justify;">Your use of this website implies your understanding and consent that any items and services obtained through the site are at your own risk, and any such services are provided on an “as is” basis, without any warranties of any nature. Neither the Company nor anyone affiliated with it, warranties that the website, its content, or the services or items obtained through it will be reliable, accurate,or error-free, or that the site or its down-loadable files or its server are free of viruses or harmful elements, or that any site defects will be repaired, or that service will be uninterrupted, or that the site will meet all your expectations. The Company is not responsible for any damages or loss caused by viruses, denial of service attacks, visits to sites linked to it, or other malicious or harmful materials that may effect Users computer equipment, programs, data or proprietary material. The User understands the Company does not guarantee or warrant that any files offered for download from either the Website or the internet will be free of destructive code or viruses, and as such the User is responsible for carrying out sufficient actions to protect the security and backup of their data, and have created an external option to our site, for retrieval of any lost data. Lastly, the Company hereby disclaims all warranties of any kind, including but not limited to statutory, non-infringement, fitness for purpose,or merchantability; these terms being subject to applicable law.</p>

          <p>  <strong>WAIVER AND SEVERABILITY</strong><br /></p>
            <p style="text-align: justify;">Any waiver by the Company of any of these Terms of Use shall not be deemed to be a continuing waiver of said Term or condition, and any failure by the Company to assert a provision of these Terms of Use shall not constitute a waiver of such right or provision. If any these Terms of Use is held by a court to be illegal, invalid, or unenforceable for any reason, it shall not effect the remaining provisions of the Terms of Use, which will continue to be fully enforceable.</p>

            <p><strong>INDEMNIFICATION</strong><br /></p>
          <p style="text-align: justify;">  Your use of this site constitutes your agreement to indemnify and hold harmless the Company, its affiliates and licensors and their respective directors, officers, contractors, employees, agents, licensors and suppliers from any claims, damages, liabilities, awards, judgments, costs, losses, expenses or fees (including legal fees) resulting from use of the Website or violation of these Terms of Use, including any use of the Website’s services, products, information and content, that is not authorized in these Terms of Use.</p>

            <p><strong>MINORS</strong><br /></p>
            <p style="text-align: justify;">The Company does not knowingly collect personal information from any child under the age of nineteen (19) through this Website, and the services and business of this site is not directed at children under the age of nineteen (19).</p>

            <p><strong>GOVERNING LAW AND JURISDICTION</strong><br /></p>
            <p style="text-align: justify;">Any action or legal suit proceeding arising out of, these Terms of Use or the Website shall be conducted exclusively in the federal courts. The Company reserves the right to bring any action or suit against you for breach of these Terms of Use in your country of residence or any other relevant country. And your use of this Website constitutes your agreement and waiver of any objections to this declaration of jurisdiction.</p>

            <p><strong>ENTIRE AGREEMENT</strong><br /></p>
            <p style="text-align: justify;">The Terms of Use and Privacy Policy constitute a binding agreement between you and the Company on all matters concerning the Website, and supersede all prior agreements, representations, understandings, and warranties, with respect to the Website.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection
